<?php 

namespace App\Services;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;

class ReceptiveContact
{
    public function contact(Request $request): array
    {
        try {
            // Validate request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:50',
                'complement' => 'nullable|string|max:255',
                'message' => 'required|string|max:2000',
                'origin' => 'nullable|string|max:255',
            ]);

            // Save contact to database
            $contact = Contact::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'complement' => $validated['complement'] ?? null,
                'message' => $validated['message'],
                'origin' => $validated['origin'] ?? null,
            ]);

            if (!$contact) {
                return [
                    'status' => 'error',
                    'message' => 'Erro ao salvar contato. Tente novamente.',
                    'code' => 500
                ];
            }

            // Send email
            $emailSent = $this->sendEmail($validated);

            if (!$emailSent) {
                return [
                    'status' => 'warning',
                    'message' => 'Contato salvo, mas houve erro ao enviar email.',
                    'code' => 200
                ];
            }

            return [
                'status' => 'success',
                'message' => 'Mensagem enviada com sucesso! Entraremos em contato em breve.',
                'code' => 200
            ];

        } catch (\Illuminate\Validation\ValidationException $e) {
            return [
                'status' => 'error',
                'message' => 'Dados inválidos: ' . $e->getMessage(),
                'code' => 422
            ];
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => 'Erro ao processar sua mensagem. Tente novamente.',
                'code' => 500
            ];
        }
    }

    private function sendEmail(array $data): bool
    {
        try {
            Mail::send('emails.contact', [
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'] ?? 'Não informado',
                'messageContent' => $data['message'],
                'complement' => $data['complement'] ?? 'Não informado',
                'origin' => $data['origin'] ?? 'Não informado',
            ], function ($message) use ($data) {
                $message->to('claudioigorai@gmail.com')->cc('contato@arquitetoricardomoraisprojetos.com')->bcc('sigo.websolutions@gmail.com')
                    ->subject('Novo Contato - ' . $data['name']);
            });

            return true;
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
            return false;
        }
    }
}
