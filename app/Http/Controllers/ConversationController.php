<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessagesRequest;
use App\Models\User;
use App\Repository\ConversationRepository;
use Illuminate\Auth\AuthManager;

class ConversationController extends Controller
{
    public function __construct(private ConversationRepository $conversationRepository, private AuthManager $auth_user )
    {
        
    }


    public function index() {

        return view('conversation.index', [
            'conversation_users' => $this->conversationRepository->getConversation($this->auth_user->user()->id),
            'status_users' => $this->conversationRepository->getConversationStatus($this->auth_user->user()->id) , 
            'auth_user' => $this->auth_user->user(),
            'actif_user' => $this->auth_user->user()
        ]) ; 

    }

    public function show(User $user) {

        $this->authorize('talkTo', $user)    ; 

        $messages = $this->conversationRepository->getMessages($this->auth_user->user()->id, $user->id) ; 

        foreach ($messages->get() as $message) {
            
            if ($message->read_at === NULL) {
                $message->read_at = now() ; 
                $message->save() ; 
            }
        }
        
        return view('conversation.show', [
            'conversation_users' => $this->conversationRepository->getConversation($this->auth_user->user()->id),
            'status_users' => $this->conversationRepository->getConversationStatus($this->auth_user->user()->id) , 
            'auth_user' => $this->auth_user->user(),
            'actif_user' => $user,
            'messages' => $messages->paginate(25) ,  
        ]) ; 
    }


    public function store(User $user, MessagesRequest $request) {

        $this->authorize('talkTo', $user) ; 

        $this->conversationRepository->createMessage($request->validated('content'), $this->auth_user->user()->id, $user->id ) ; 

        return redirect()->back() ; 
    }
}
