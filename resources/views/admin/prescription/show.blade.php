@extends('admin.layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Prescription Details</h5>
                </div>

                <div class="card-body">
                    <p>Date: {{ $prescription->date }}</p>
                    <p>Patient: {{ $prescription->patient->name }}</p>
                    <p>Doctor: {{ $prescription->doctor->name }}</p>
                    <p>Disease: {{ $prescription->disease }}</p>
                    <p>Symptoms: {{ $prescription->symptoms }}</p>
                    <p>Medicine: {{ $prescription->medicine }}</p>
                    <p>Procedure to use medicine: {{ $prescription->procedure }}</p>
                    <p>Feedback: {{ $prescription->feedback }}</p>
                    <p>Signature: {{ $prescription->signature }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
