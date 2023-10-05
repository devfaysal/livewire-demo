<x-bootstrap-layout>
 <style>
        .step{
            display: flex;
            position: relative;
            padding-bottom: 15px;
        }
        .step::before{
            content: "";
            width: 30px;
            height: 30px;
            line-height: 30px;
            display: inline-block;
            font-size: 20px;
            background: #fff;
            border: 10px solid #E4E7EC;
            border-radius: 50%;
            margin-right: 20px;
            margin-top: 5px;
        }
        .step.active::before{
            content: "";
            border: 10px solid #5ABC76;
            box-shadow: #f6f6f6 0px 0 0px 7px;
        }
        .step.success::before{
            content: "✔";
            border: none;
            background: #5ABC76;
            font-size: 25px;
            padding-left: 5px;
            color: #fff;
        }
        .step::after{
            content: "";
            width: 3px;
            height: 66px;
            line-height: 30px;
            display: inline-block;
            font-size: 20px;
            left: 13px;
            z-index: -1;
            position: absolute;
            top: 25px;
            background: #E4E7EC;
        }
        .step.success::after{
            background: #5ABC76;
        }
        .step:last-child::after{
            height: 0;
        }
        .sidebar{
            max-width: 350px;
            box-shadow: rgba(0, 0, 0, 0.15) 8px 4px 16px 0px;
        }
    </style>
    <h1 class="pb-2">Onboarding Wizard</h1>
    <livewire:onboarding-wizard />
</x-bootstrap-layout>