@extends('layouts.admin.design')
@section('content')

<!-- Bootstrap Forms Validation -->
                    <h2 class="content-heading">Bootstrap Forms</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Validation</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                    <!-- jQuery Validation functionality is initialized in js/pages/be_forms_validation.min.js which was auto compiled from _es6/pages/be_forms_validation.js -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form class="js-validation-bootstrap" action="{{ url('/admin/update-pwd') }}" method="post">@csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-old-password">Old Password <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="val_old_password" name="val_old_password" placeholder="Choose a safe one..">
												<span id="chkPwd"></span>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-new-password">New Password <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="val_new_password" name="val_new_password" placeholder="Choose a safe one..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val_confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="password" class="form-control" id="val_confirm_password" name="val_new_password" placeholder="..and confirm it!">
                                            </div>
                                       
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Bootstrap Forms Validation -->

                    <!-- END Material Forms Validation -->


		@endsection