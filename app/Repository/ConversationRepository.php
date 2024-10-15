<?php
namespace App\Repository ;

use App\Models\Message;
use App\Models\User;

class ConversationRepository {

    public function __construct(private User $user, private Message $message)
    {
        
    }

    public function getConversation( int $user_id ) {

        return $this->user->query()->where('id', '!=', $user_id)-> get()->sortByDesc(function ($user) {
            
            // Récupère le dernier message entre les deux utilisateurs
            $latestMessageFrom = $user->messagesFrom->first();
            $latestMessageTo = $user->messagesTo->first();
    
            // Compare les deux pour obtenir le dernier message
            $latestMessageDate = max(optional($latestMessageFrom)->created_at, optional($latestMessageTo)->created_at);
            
            return $latestMessageDate;
        } ) ; 
    }



    public function getConversationStatus (int $user_id) {

        return $this->user->query()->where('id', '!=', $user_id)->latest()->take(10)->get() ; 
        
    }


    public function createMessage(string $content, int $from, int $to) : Message {

        return $this->message->query()->create([
            'content' => $content,
            'from_id' => $from,
            'to_id' =>$to
        ]) ; 
    }


    public function getMessages(int $from, int $to)   {


        return $this->message->where(function ($query) use ($from, $to) {

                            $query->where('from_id', $from)->where('to_id', $to);

                        })->orWhere(function ($query) use ($from, $to) {

                            $query->where('from_id', $to)->where('to_id', $from);

                        })->with([
                            'from' => function($query) {
                                $query->select('name', 'id') ; 
                            }
                        ])->orderBy('created_at', 'asc') ; 

    }


    private function unreadCount() {

        
    }
    


}