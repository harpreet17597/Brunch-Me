@extends('backend.admin-master')
@section('style')
    <x-summernote.css/>
    <x-datatable.css/>
@endsection
@section('site-title')
    {{__('All Featured Business')}}
@endsection

@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                  <x-msg.success/>
                                  <x-msg.error/>
                                    <h4 class="header-title">{{__('All Featured Business')}}</h4>
                                    <div class="data-tables datatable-primary table-wrap">
                                        <table class="text-center" id="featured_business_table">
                                            <thead class="text-capitalize">
                                            <tr>
                                                <th>{{__('ID')}}</th>
                                                <th>{{_('Profile Image')}}</th>
                                                <th>{{_('Name')}}</th>
                                                <th>{{__('Phone Country')}}</th>
                                                <th>{{__('Phone')}}</th>
                                                <th>{{_('Email')}}</th>
                                                <th>{{_('Restaurant Opening Time')}}</th>
                                                <th>{{_('Restaurant Closing Time')}}</th>
                                                <th>{{_('Start Date')}}</th>
                                                <th>{{_('End Date')}}</th>
                                                <th>{{_('Actions')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Primary table end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<x-datatable.js/>
<script type="text/javascript">
    const urls = {
   
        featuredDataTable : "{{ route('admin.all.frontend.featured.business.datatable') }}",
        changeProfileVerificationStatus : "{{ route('admin.frontend.business.profile.verify','id') }}"
 
    }
</script>
<script src="{{asset('dist/js/common/ajax.js')}}"></script>
<script src="{{asset('dist/js/pages/business.js')}}"></script>
@endsection
