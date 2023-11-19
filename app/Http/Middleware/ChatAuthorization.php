<?php

namespace App\Http\Middleware;

use App\Models\Chat;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChatAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->routeIs('chat.show') && $request->route('chatUuid')) {

            $chat = Chat::find($request->route('chatUuid'));

            abort_if(!$chat || $chat->session_id !== session()->getId(), 403);
        }
        return $next($request);
    }
}
