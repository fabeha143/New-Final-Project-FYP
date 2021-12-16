@extends('layouts.master')
@section('content')
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="{{ route('/inbox/create')}}" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
    </li>
</ul>
<section class="content email-page">
    <div class="container-fluid">
        <div class="row clearfix">                 
            <div class="col-lg-12">
                <ul class="nav nav-tabs bg-white">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#primary">Primary</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active in" id="primary">
                        <div class="mail_listing table-responsive">
                            <table class="table table_custom table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td>
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_2" />
                                                <label for="basic_checkbox_2"></label>
                                            </div>
                                        </td>                                    
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down">Hamza</td>
                                        <td class="max-texts">
                                            <a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a>
                                        </td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> 12:30 PM </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>        
            <div class="col-sm-6">
                <p class="m-t-15">Showing 1 - 15 of 200</p>
            </div>
            <div class="col-sm-6 text-right">
                <button type="button" class="btn btn-primary  btn-sm"><i class="zmdi zmdi-arrow-left"></i></button>
                <button type="button" class="btn btn-primary  btn-sm"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>
@endsection()
