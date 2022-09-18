<?php

namespace App\Http\Resources\V1\SecondSemResult;

use Illuminate\Http\Resources\Json\JsonResource;

class SecondSemResultResource extends JsonResource
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
            'objectOrientedProgramming' => $this->object_oriented_programming,
            'graphicsAndMultimedia' => $this->graphics_and_multimedia,
            'dataStructuresAndAlgorithm' => $this->data_structures_and_algorithm,
            'systemAnalysisAndDesign' => $this->system_analysis_and_design,
            'dataCommunicationAndNetworking' => $this->data_communication_and_networking,
            'statisticsForIt' => $this->statistics_for_it,
            'humanValuesAndProfessionalEthics' => $this->human_values_and_professional_ethics,
            'englishForTechnology2' => $this->english_for_technology_2,
        ];
    }
}
