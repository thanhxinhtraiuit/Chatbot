<?php
 
namespace App\Conversations;
 
use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
 use App\Textmau; 
class DemoConversation extends Conversation
{
    private $textmau;
    private $arr=[];
    private $sum=0;
    private $name;
    public function main()
    {
        if($this->sum==0){
            $this->name='Chao ban,Ban Can Gi ?';
        }
        $this->ask($this->name , function(Answer $answer) {
            // Save result
            $this->textmau = $answer->getText();
            $this->arr = $this->getdata();
            foreach ($this->arr as $value) {
                if($value->intext==$this->textmau){
                       $this->name=$value->outtext;
                }
            }
            $this->sum++;
            $this->main();
        });
    }
 
    public function getdata()
    {
      $data=Textmau::all();
      return $data;
    }
 
    public function run()
    {
        // This will be called immediately
        $this->main();
     
    }

//--------------------

}