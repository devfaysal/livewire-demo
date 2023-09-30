<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Livewire\Component;

class OnboardingWizard extends Component
{
    public int $currentStep = 1;
    public string $language = 'English';
    public string $name = 'John Doe';
    public string $email = 'john@example.com';
    public string $phone = '+8801712345678';
    public string $biography = 'Lorem Ipsum Dolor sit amet';
    public string $image;
    public array $skills = [
        'PHP',
        'Python',
        'Java',
        'C++',
        'HTML',
        'CSS',
        'Laravel',
        'Livewire',
        'Filament',
        'Ajax',
        'Bootstrap',
        'Tailwind',
    ];
    public array $selectedSkills = [];

    public function selectSkill($skill)
    {
        $this->selectedSkills[] = $skill;
        $this->skills = array_diff($this->skills, [$skill]);
    }

    public function deSelectSkill($skill)
    {
        $this->skills[] = $skill;
        $this->selectedSkills = array_diff($this->selectedSkills, [$skill]);
    }

    public function firstStepSubmit()
    {
        $this->validate([
            'language' => ['required']
        ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $this->validate([
            'name' => ['required']
        ]);

        $this->currentStep = 3;
    }

    public function thirdStepSubmit()
    {
        $this->validate([
            'email' => ['required']
        ]);

        $this->currentStep = 4;
    }

    public function fourthStepSubmit()
    {
        $this->validate([
            'phone' => ['required']
        ]);

        $this->currentStep = 5;
    }

    public function fifthStepSubmit()
    {
        $this->validate([
            'biography' => ['required']
        ]);

        $this->currentStep = 6;
    }

    public function sixthStepSubmit()
    {
        $this->validate([
            'image' => ['required']
        ]);
    }

    public function backToStep($step)
    {
        $this->currentStep = $step;
    }

    public function render()
    {
        return view('livewire.onboarding-wizard');
    }
}
