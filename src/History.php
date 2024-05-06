<?php
namespace Pirmann\Weather;
use Pirmann\Weather\Tag;

class History
{
    private array $verlauf = [];

    public function getVerlauf(): array
    {
        return $this->verlauf;
    }

    /**
     * @param Tag $tag
     * @return void
     * lässt dich einen Tag zum Verlauf hinzufügen
     */
    public function addToVerlauf(Tag $tag): void
    {
        array_push($this->verlauf,$tag);
    }

    public function __construct(Tag $tag)
    {
        array_push($this->verlauf,$tag);

    }
    public function getDay($date):string{
        foreach($this->verlauf as $item){
            if($item->getTag() === $date){
                return $item->getWeather();
            }
        }
    }

}