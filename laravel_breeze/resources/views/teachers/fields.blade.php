<div class="container">
    <div class="row mt-5">
        <div class="col-6 form-group">  
            {!!Form::label('name', 'Name') !!}
            {!!Form::text('name', null , ['class' => 'form-control' , 'placeholder' => 'Enter Name']) !!}
        </div>

        <div class="col-6 form-group">
            {!!Form::label('email', 'Email') !!}
            {!!Form::text('email', null , ['class' => 'form-control' , 'placeholder' => 'Enter Email']) !!}
        </div>

        <div class="col-6 form-group">
            {!!Form::label('student_id', 'Student') !!}
            {!!Form::select('student_id[]', $students, null , ['class' => 'form-control' , 'placeholder' => 'Select Student' , 'multiple'=>'multiple']) !!}
        </div>
        
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn bg-gray-800 text-white']) !!}
    </div>
</div>
