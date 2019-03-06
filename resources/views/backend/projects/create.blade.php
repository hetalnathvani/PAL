@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.projects.management') . ' | ' . trans('labels.backend.projects.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.projects.management') }}
        <small>{{ trans('labels.backend.projects.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.projects.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-project']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.projects.create') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.projects.partials.projects-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->
        <div class="box-body">
                {{-- project Name --}}
                <div class="form-group">
                    {{ Form::label('name','project_name', ['class' => 'col-lg-2 control-label required']) }}

                    <div class="col-lg-10">
                        {{ Form::text('project_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.projecta.project_name'), 'required' => 'required']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->
                <div class="form-group">
                    {{ Form::label('name','project_details', ['class' => 'col-lg-2 control-label required']) }}

                    <div class="col-lg-10">
                        {{ Form::text('project_details', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.projects.project_details'), 'required' => 'required']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->
                <div class="form-group">
                    {{ Form::label('name','tech_id', ['class' => 'col-lg-2 control-label required']) }}

                    <div class="col-lg-10">
                        {{ Form::text('tech_id', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.projects.tech_id'), 'required' => 'required']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->
                <div class="form-group">
                    {{ Form::label('name','file', ['class' => 'col-lg-2 control-label required']) }}

                    <div class="col-lg-10">
                        {{ Form::file('project_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.projects.file'), 'required' => 'required']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.projects.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!-- form-group -->
            </div><!--box-body-->
        </div><!--box box-success-->
    {{ Form::close() }}
@endsection
