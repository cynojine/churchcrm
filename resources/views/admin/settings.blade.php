@extends('layouts.admin.design')
@section('content')

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <!-- Bootstrap Design -->
                    <h2 class="content-heading">password Change</h2>
                    <div class="row">
                        <div class="col-md-6">
    
                        <div class="col-md-6">
                            <!-- Normal Form -->
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Normal Form</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <form action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                                        <div class="form-group">
                                            <label for="example-nf-password">Old Password</label>
                                            <input type="email" class="form-control" id="example-nf-email" name="example-nf-email" placeholder="Enter Email..">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-nf-password">New Password</label>
                                            <input type="password" class="form-control" id="example-nf-password" name="example-nf-password" placeholder="Enter Password..">
                                        </div
										<div class="form-group">
                                            <label for="example-nf-password">Comfirm Password</label>
                                            <input type="password" class="form-control" id="example-nf-password" name="example-nf-password" placeholder="Enter Password..">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-alt-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Normal Form -->

                                                        
                                    </form>
                                </div>
                            </div>
                            <!-- END Dropdown Groups -->
                        </div>
                    </div>
                    <!-- END Bootstrap Design -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>

		@endsection