@if($item->__icon!='pen')
    <div class="col-sm-9 criterii">
        <h3>{{trans('tender.criteria_title')}}</h3>
        <table class="tender--customer margin-bottom tender--customer-left">
            <tbody>
                <tr class="main-row">
                    <td class="col-md-8 col-md-pull-4">{{trans('tender.price')}}:</td>
                    <td class="col-md-4 col-md-push-8">{{$features_price*100}}%</td>
                </tr>
                @if(!empty($item->features))
                    @foreach($item->features as $feature)
                        <tr class="main-row">
                            <td class="col-md-8 col-md-pull-4">{{$feature->description}}:</td>
                            <td class="col-md-4 col-md-push-8 1">{{$feature->max*100}}%</td>
                        </tr>
                        @foreach($feature->enum as $enum)
                            <tr class="add-row">
                                <td class="col-md-8 col-md-pull-4 grey-light">{{$enum->title}}:</td>
                                <td class="col-md-4 col-md-push-8 grey-light">{{$enum->value*100}}%</td>
                            </tr>
                        @endforeach
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endif