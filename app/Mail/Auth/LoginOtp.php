<?php

namespace App\Mail\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LoginOtp extends Mailable
{
    use Queueable, SerializesModels;

    public string $otp;
    public string $token;
    public string $expiredAt;

    public function __construct($otp, $token, $expiredAt)
    {
        $this->otp = $otp;
        $this->token = $token;
        $this->expiredAt = $expiredAt;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Login Otp',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.auth.login-otp',
            with: [
                'otp' => $this->otp,
                'token' => $this->token,
                'expiredAt' => $this->expiredAt,
            ],
        );
    }
}
