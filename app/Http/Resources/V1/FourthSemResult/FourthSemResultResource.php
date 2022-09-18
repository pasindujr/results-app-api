<?php

namespace App\Http\Resources\V1\FourthSemResult;

use Illuminate\Http\Resources\Json\JsonResource;

class FourthSemResultResource extends JsonResource
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
            'webApplicationDevelopment' => $this->web_application_development,
            'enterpriseArchitecture' => $this->enterprise_architecture,
            'professionalIssuesInIt' => $this->professional_issues_in_it,
            'computerArchitecture' => $this->computer_architecture,
            'mobileApplicationDevelopment' => $this->mobile_application_development,
            'freeAndOpenSourceSystems' => $this->free_and_open_source_systems,
            'individualProject' => $this->individual_project,
            'englishForTechnology4' => $this->english_for_technology_4,
        ];
    }
}
