<div class="box-body">
    <div class="form-group">
        <!-- project name -->
        <!-- Look Below Example for reference -->
        {{ Form::label('project name', trans('labels.backend.projects.project_name'), ['class' => 'col-lg-2 control-label required']) }}
         <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             {{ Form::text('project name', '', ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.projects.project_name'), 'required' => 'required']) }} 
        </div>
    </div>    
     <div class="form-group">
        <!-- project name -->
        {{ Form::label('project details', trans('labels.backend.projects.project_details'), ['class' => 'col-lg-2 control-label required']) }}
         <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             {{ Form::text('project details', '', ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.projects.project_details'), 'required' => 'required']) }} 
        </div>
    </div>
<div class="form-group">
        {{ Form::label('categories', trans('validation.attributes.backend.projects.category'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
        @if(!empty($selectedCategories))
            {{ Form::select('categories[]', $technologyCategories, $selectedCategories, ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
        @else
            {{ Form::select('categories[]', $technologyCategories, , ['class' => 'form-control tags box-size', 'required' => 'required', 'multiple' => 'multiple']) }}
        @endif
        </div><!--col-lg-10-->
    </div><!--form control-->

     <div class="form-group">
        <!-- project name -->
          {{ Form::label('upload file', trans('labels.backend.projects.file'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
             {{ Form::file('upload file', '', ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.projects.file'), 'required' => 'required']) }} 
        </div>
    </div>    
</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
