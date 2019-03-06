@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.technologies.management') . ' | ' . trans('labels.backend.technologies.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.technologies.management') }}
        <small>{{ trans('labels.backend.technologies.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($technologies, ['route' => ['admin.technology.update', $technologies], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-technology']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.technologies.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.technologies.partials.projects-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                {{-- Branch Name --}}
                <div class="form-group">
                    {{ Form::label('name','tech_name', ['class' => 'col-lg-2 control-label required']) }}

                    <div class="col-lg-10">
                        {{ Form::text('tech_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.technologies.tech_name'), 'required' => 'required']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->
                    <div class="form-group">
                    {{ Form::label('name','tech_id', ['class' => 'col-lg-2 control-label required']) }}

                    <div class="col-lg-10">
                        {{ Form::text('tech_id', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.technologies.tech_id'), 'required' => 'required']) }}
                    </div><!--col-lg-10-->
                </div><!--form control-->

                
                    {{-- Including Form blade file --}}
            
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.technologies.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
