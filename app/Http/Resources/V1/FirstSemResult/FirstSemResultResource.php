<?php

namespace App\Http\Resources\V1\FirstSemResult;

use Illuminate\Http\Resources\Json\JsonResource;

class FirstSemResultResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'studentId' => $this->student_id,
            'personalComputerApplication' => $this->personal_computer_application,
            'computerHardware' => $this->computer_hardware,
            'structuredProgramming' => $this->structured_programming,
            'dataRepresentationAndOrganization' => $this->data_representation_and_organization,
            'databaseManagementSystem' => $this->database_management_system,
            'webDevelopment' => $this->web_development,
            'mathematicsForComputing' => $this->mathematics_for_computing,
            'englishForTechnology1' => $this->english_for_technology_1,
        ];
    }
}
