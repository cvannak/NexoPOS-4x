@extends( 'layout.dashboard' )

@section( 'layout.dashboard.body' )
<div>
    @include( '../common/dashboard-header' )
    <div id="dashboard-content" class="px-4">
        <div class="page-inner-header mb-4">
            <h3 class="text-3xl text-gray-800 font-bold">{{ __( 'Managing Customers' ) }}</h3>
            <p class="text-gray-600">{{ __( 'List of registered customers' ) }}</p>
        </div>
        <ns-crud 
            src="{{ url( 'api/nexopos/v4/crud/ns.customers' ) }}" 
            create-link="{{ url( 'dashboard/customers/create' ) }}"
            id="crud-table-body">
        </ns-crud>
    </div>
</div>
@endsection