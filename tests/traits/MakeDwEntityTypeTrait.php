<?php

use Faker\Factory as Faker;
use App\Models\Dwsync\DwEntityType;
use App\Repositories\Dwsync\DwEntityTypeRepository;

trait MakeDwEntityTypeTrait
{
    /**
     * Create fake instance of DwEntityType and save it in database
     *
     * @param array $dwEntityTypeFields
     * @return DwEntityType
     */
    public function makeDwEntityType($dwEntityTypeFields = [])
    {
        /** @var DwEntityTypeRepository $dwEntityTypeRepo */
        $dwEntityTypeRepo = App::make(DwEntityTypeRepository::class);
        $theme = $this->fakeDwEntityTypeData($dwEntityTypeFields);
        return $dwEntityTypeRepo->create($theme);
    }

    /**
     * Get fake instance of DwEntityType
     *
     * @param array $dwEntityTypeFields
     * @return DwEntityType
     */
    public function fakeDwEntityType($dwEntityTypeFields = [])
    {
        return new DwEntityType($this->fakeDwEntityTypeData($dwEntityTypeFields));
    }

    /**
     * Get fake data of DwEntityType
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDwEntityTypeData($dwEntityTypeFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'apiUrl' => $fake->word
        ], $dwEntityTypeFields);
    }
}
