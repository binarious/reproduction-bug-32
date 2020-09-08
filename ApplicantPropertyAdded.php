<?php

class ApplicantPropertyAdded
{
    private $justATest;

    public function __construct(
    ?string $salutation,
    string $firstName,
    string $lastName,
    $justATest
  ) {
      $this->justATest = $justATest;
    }
}
