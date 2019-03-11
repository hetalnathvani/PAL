@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.projects.management') . ' | ' . trans('labels.backend.projects.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.projects.management') }}
        <small>{{ trans('labels.backend.projects.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($projects, ['route' => ['admin.projects.update', $projects], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-project']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.projects.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.projects.partials.projects-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">

                <div class="form-group">
                     {{ Form::label('project_name', trans('labels.backend.projects.project_name'), ['class' => 'col-lg-2 control-label required']) }} 

                        <div class="col-lg-10">
                            <!-- Create Your Input Field Here -->
                            <!-- Look Below Example for reference -->
                             {{ Form::text('project_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.projects.project_name'), 'required' => 'required']) }} 
                        </div><!--col-lg-10-->
                    </div><!--form-group-->

                <div class="form-group">
                     {{ Form::label('project_details', trans('labels.backend.projects.project_details'), ['class' => 'col-lg-2 control-label required']) }} 

                        <div class="col-lg-10">
                            <!-- Create Your Input Field Here -->
                            <!-- Look Below Example for reference -->
                             {{ Form::text('project_details', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.projects.project_details'), 'required' => 'required']) }} 
                        </div><!--col-lg-10-->
                    </div><!--form-group-->

                <div class="form-group">
                     {{ Form::label('technology_id', trans('labels.backend.projects.technology_id'), ['class' => 'col-lg-2 control-label required']) }} 

                        <div class="col-lg-10">
                            <!-- Create Your Input Field Here -->
                            <!-- Look Below Example for reference -->
                             {{ Form::text('technology_id', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.projects.technology_id'), 'required' => 'required']) }} 
                        </div><!--col-lg-10-->
                    </div><!--form-group-->

                <div class="form-group">
                     {{ Form::label('file', trans('labels.backend.projects.file'), ['class' => 'col-lg-2 control-label required']) }} 

                        <div class="col-lg-10">
                            <!-- Create Your Input Field Here -->
                            <!-- Look Below Example for reference -->
                             {{ Form::file('file', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.projects.file'), 'required' => 'required']) }} 
                        </div><!--col-lg-10-->
                    </div><!--form-group-->
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.projects.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
