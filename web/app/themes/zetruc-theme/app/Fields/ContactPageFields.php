<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

class ContactPageFields
{
    public function __construct()
    {
        add_action('acf/init', [$this, 'fields']);
    }

    public function fields()
    {
        $contactPage = new FieldsBuilder('contact_page', [
            'title' => 'Contenu de la page Contact',
            'menu_order' => 1,
        ]);

        $contactPage
            // Section en-tête
            ->addTab('header', [
                'label' => 'En-tête',
            ])
            ->addText('contact_title', [
                'label' => 'Titre de la page',
                'instructions' => 'Laissez vide pour utiliser le titre de la page',
                'placeholder' => 'Contactez-nous',
            ])
            ->addTextarea('contact_subtitle', [
                'label' => 'Sous-titre',
                'instructions' => 'Description courte sous le titre',
                'rows' => 3,
            ])

            // Section formulaire
            ->addTab('form', [
                'label' => 'Formulaire',
            ])
            ->addText('contact_form_id', [
                'label' => 'ID du formulaire Contact Form 7',
                'instructions' => 'Trouvez l\'ID dans Contact > Formulaires de contact',
                'placeholder' => '1',
            ])

            // Section coordonnées
            ->addTab('coordinates', [
                'label' => 'Coordonnées',
            ])
            ->addTextarea('contact_address', [
                'label' => 'Adresse',
                'instructions' => 'Adresse complète de votre entreprise',
                'rows' => 3,
                'placeholder' => '123 Rue de la République\n75001 Paris, France',
            ])
            ->addText('contact_phone', [
                'label' => 'Téléphone',
                'placeholder' => '+33 1 23 45 67 89',
            ])
            ->addEmail('contact_email', [
                'label' => 'Email',
                'placeholder' => 'contact@monsite.com',
            ])
            ->addTextarea('contact_hours', [
                'label' => 'Horaires d\'ouverture',
                'rows' => 4,
                'placeholder' => 'Lundi - Vendredi : 9h00 - 18h00\nSamedi : 9h00 - 12h00\nDimanche : Fermé',
            ])

            // Section carte
            ->addTab('map', [
                'label' => 'Carte',
            ])
            ->addTextarea('contact_map', [
                'label' => 'Code d\'intégration de la carte',
                'instructions' => 'Collez le code iframe de Google Maps ou autre service de carte',
                'rows' => 5,
                'placeholder' => '<iframe src="..." width="100%" height="300"></iframe>',
            ])

            // Localisation
            ->setLocation('page_template', '==', 'page-contact.blade.php');

        acf_add_local_field_group($contactPage->build());
    }
}


