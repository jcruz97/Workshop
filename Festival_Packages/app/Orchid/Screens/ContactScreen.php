<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;
use Illuminate\Http\Request;

class ContactScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Prise de contact';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Formulaire simple de contact';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Envoyer le message')
                    ->icon('paper-plane')
                    ->method('sendMessage')
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([

                Input::make('name')
                    ->title('Nom du contact')
                    ->required()
                    ->placeholder('Nom du contact')
                    ->help('Entrez ici le nom du contact'),

                Quill::make('message')
                    ->title('Message')
                    ->required()
                    ->placeholder('Entrez votre message ici ...')
                    ->help('Composez le message que vous voulez transmettre à cette personne')
              ])
        ];
    }

    public function sendMessage(Request $request)
    {

        $request -> validate([
            'name'=> 'required',
            'message'=> 'required|min:50'
        ]);

        Alert::info('Votre message a bien été envoyé !');
        return back();
    }
}
