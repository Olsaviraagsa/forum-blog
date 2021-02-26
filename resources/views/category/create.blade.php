@extends('layouts.app')
@section('title', 'Create New Category')

@section('content')
<section class="breadcrumb_area">
    <img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/v.svg" class="p_absolute bl_left" alt="leaf"><img loading="lazy" src="https://wordpress.creativegigs.net/docly/wp-content/themes/docly/assets/img/home_one/b_leaf.svg" class="p_absolute bl_right" alt="leaf"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vydm/ljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYmFubmVyX2JnLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTExNjI4JnRva2VuPTRiNjVmMDgwMGVjOGQ2Y2M.q.png" loading="lazy" class="p_absolute star" alt="leaf"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRnNoYXBfMDEucG5nJmNhY2hlTWFya2VyPTE2MDk2OTg5NTEtMTc1MTA1JnRva2VuPTViMGNhYzM1NTUzN2Y1ZTM.q.png" loading="lazy" class="p_absolute wave_shap_one" alt="Docly banner shape 01"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRnNoYXBfMDIucG5nJmNhY2hlTWFya2VyPTE2MDk2OTg5NTEtMTQ2MDAzJnRva2VuPWRkYmMzMTcxZDZjMDZiN2Y.q.png" loading="lazy" class="p_absolute wave_shap_two" alt="Docly banner shape 02"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c2Vyd/mljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGYl9tYW5fdHdvLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTczOTkmdG9rZW49OGU1MmJjYTIzZTAyNmNlMQ.q.png" loading="lazy" class="p_absolute one wow fadeInRight" alt="Man illustration"><img src="https://wordpress.creativegigs.net/docly/wp-content/plugins/phastpress/phast.php/c/2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd29yZHByZXNzLmNyZWF0aXZlZ2lncy5uZXQlMkZkb2NseSUyRndwLWNvbnRlbnQlMkZ0aGVtZXMlMkZkb2NseSUyRmFzc2V0cyUyRmltZyUyRmhvbWVfb25lJTJGZmxvd2VyLnBuZyZjYWNoZU1hcmtlcj0xNjA5Njk4OTUxLTEyMDMmdG9rZW49Nzc0YmZkMjAyY2JiYzdlMQ.q.png" loading="lazy" class="p_absolute two wow fadeInUp" alt="Flower illustration"> <div class="container custom_container">
        <div class="breadcrumb_text text-center">
            <h2 class="text-center">
                {{ __('Create New Category') }}</h2>
            </div>
    </div>
    </section>

    <div class="container py-5">
        <div class="card-body">
            <div id="alert"></div>
            <div class="row">
                <div class="col-md-12 py-5">
                    {{ Form::open(['url' => route('categories.store'), 'method' => 'post', 'id' => 'create-category']) }}
                        <div class="form-group row">
                            {{ Form::label('name', 'Name', ['class' => 'col-md-2']) }}
                            <div class="col-md-10">
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        {{ Form::submit('Save', ['class' => 'btn btn-primary float-right', 'id' => 'submit-btn']) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
@endsection

@section('script')
    <script>
        $(function () {
            let btnSubmit = $('#submit-btn')
            let form = $('#create-category')
            form.on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    beforeSend: function () {
                        btnSubmit.attr('disabled', true)
                    },
                    success: function (response) {
                        $('#alert').html(`
                            <div class="alert alert-success" role="alert">
                                ${response.message}
                            </div>
                        `)
                    },
                    error: function (jqXHR) {
                        let statusCode = jqXHR.status
                        if (statusCode == 422) {
                            let errors = jqXHR.responseJSON.message
                            $.each(errors, function (index, value) {
                                var element = $(`:input[name="${index}"]`)
                                $(`#${index}-error`).remove()
                                element.closest('.form-group>.col-md-9').append(`
                                    <span id="${index}-error" class="text-danger error">
                                        ${value[0]}
                                    </span>
                                `)
                            });
                        } else {
                            $('#alert').html(`
                                <div class="alert alert-danger" role="alert">
                                    Something was wrong. Please tryagain later.
                                </div>
                            `)
                        }
                    },
                    complete: function () {
                        btnSubmit.attr('disabled', false)
                    }
                });
            });
        });
    </script>
@endsection