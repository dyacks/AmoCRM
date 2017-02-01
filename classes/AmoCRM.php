<?php

class AmoCRM{
    
    private $user;
    private $lead;
    
    public function __construct()
    {
        $this->user = new User();
        $this->lead = new Lead();
    }

    public function sendLead($api)
    {
        try {
            $lead = new Lead();
            $lead->setName('Самая новая сделка')
                ->setResponsibleUserId($api->config['ResponsibleUserId'])
                ->setCustomField(
                    $api->config['LeadFieldCustom'],
                    $api->config['LeadFieldCustomValue1']
                )
                ->setTags(['тег 1', 'тег 2'])
                ->setStatusId($api->config['LeadStatusId']);
            $api->request(new Request(Request::SET, $lead));
            return $api->last_insert_id;
        } catch(Exception $e){
            return null;
        }
    }

    public function sendContact($api, $idLead)
    {
        $contact = new Contact();
        $contact->setName($this->user->name)
            ->setCustomField(
                $api->config['ContactFieldPhone'],
                $this->user->phone,
                'MOB'
            )
            ->setCustomField(
                $api->config['ContactFieldEmail'],
                $this->user->email,
                'WORK'
            )
            ->setResponsibleUserId($api->config['ResponsibleUserId'])
            ->setLinkedLeadsId($idLead)
            ->setTags(['тег контакта 1', 'тег контакта 2']);
        
        $api->request(new Request(Request::GET, ['query' => $this->user->email], ['contacts', 'list']));
        
        $contact_exists = ($api->result) ? $api->result->contacts[0] : false;
        
        if ($contact_exists) {
            $contact->setUpdate($contact_exists->id, $contact_exists->last_modified + 1)
                    ->setResponsibleUserId($contact_exists->responsible_user_id)
                    ->setLinkedLeadsId($contact_exists->linked_leads_id);
        }

        $api->request(new Request(Request::SET, $contact));
    }


}