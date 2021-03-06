<div class="col-sm-9 margin-bottom margin-bottom-more">    
    @if (in_array($item->procurementMethodType, ['aboveThresholdEU', 'competitiveDialogueEU', 'aboveThresholdUA.defense']))
        @if (App::getLocale() == 'ua')
            <h3>Інформація про предмет закупівлі</h3>
            <div style="margin-top:-15px;margin-bottom:20px">Scope of the procurement</div>
            <div class="row">
                @if (!empty($item->description))
                    <div class="col-md-12 description-wr margin-bottom">
                        <div class="tender--description--text description{{mb_strlen($item->description)>350?' croped':' open'}}">
                            {!!nl2br($item->description)!!}
                        </div>
                        @if (mb_strlen($item->description)>350)
                            <a class="search-form--open" href="">
                                <i class="sprite-arrow-right"></i>
                                <span>{{trans('interface.expand')}}</span>
                                <span>{{trans('interface.collapse')}}</span>
                            </a>
                        @endif
                    </div>
                @endif

                @if (!empty($item->description_en))
                    <div class="col-md-12 description-wr margin-bottom">
                        <div class="tender--description--text description{{mb_strlen($item->description_en)>350?' croped':' open'}}">
                            {!!nl2br($item->description_en)!!}
                        </div>
                        @if (mb_strlen($item->description_en)>350)
                            <a class="search-form--open" href="">
                                <i class="sprite-arrow-right"></i>
                                <span>{{trans('interface.expand')}}</span>
                                <span>{{trans('interface.collapse')}}</span>
                            </a>
                        @endif
                    </div>
                @endif

                @if(!empty($item->items) && !$item->__isMultiLot)
                    <div class="col-md-12 margin-bottom padding-side"><strong>Опис окремої частини або частин предмета закупівлі</strong></div>
                    @foreach($item->items as $one)
                        <div class="row margin-bottom">
                            <div class="col-md-4 col-md-push-8">
                                <div class="padding margin-bottom">
                                    {{!empty($one->quantity)?$one->quantity:''}} @if(!empty($one->unit->code)){{trans('measures.'.$one->unit->code.'.symbol')}}@endif
                                </div>
                            </div>
                            <div class="col-md-8 col-md-pull-4 description-wr{{!empty($one->description) && mb_strlen($one->description)>350?' croped':' open'}}">
                                @if (!empty($one->description))
                                    <div class="tender--description--text description padding-side">
                                        {!!nl2br($one->description)!!}
                                    </div>
                                    @if (mb_strlen($one->description)>350)
                                        <a class="search-form--open"><i class="sprite-arrow-down"></i>
                                            <span>{{trans('interface.expand')}}</span>
                                            <span>{{trans('interface.collapse')}}</span>
                                        </a>
                                    @endif
                                @endif
                                @if (!empty($one->classification))
                                    <div class="tender-date padding-left-more">{{trans('tender.cpv')}}: {{$one->classification->id}} — {{$one->classification->description}}</div>
                                @else
                                    <div class="tender-date padding-left-more">{{trans('tender.no_cpv')}}</div>
                                @endif
                                @if(!empty($one->additionalClassifications))
                                    @foreach($one->additionalClassifications as $classification)
                                        <div class="tender-date padding-left-more">{{trans('scheme.'.$classification->scheme)}}: {{$classification->id}} — {{$classification->description}}</div>
                                    @endforeach
                                @endif
                                @if (!empty($one->description_en))
                                    <br>
                                    <div class="tender--description--text description padding-side">
                                        {!!nl2br($one->description_en)!!}
                                    </div>
                                    @if (mb_strlen($one->description_en)>350)
                                        <a class="search-form--open"><i class="sprite-arrow-down"></i>
                                            <span>{{trans('interface.expand')}}</span>
                                            <span>{{trans('interface.collapse')}}</span>
                                        </a>
                                    @endif
                                    @if (!empty($one->classification))
                                        <div class="tender-date padding-left-more">CPV: {{$one->classification->id}}</div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        @else
            <h3>Scope of the procurement</h3>
            <div class="row">
                @if (!empty($item->description_en))
                    <div class="col-md-12 description-wr margin-bottom">
                        <div class="tender--description--text description{{mb_strlen($item->description_en)>350?' croped':' open'}}">
                            {!!nl2br($item->description_en)!!}
                        </div>
                        @if (mb_strlen($item->description_en)>350)
                            <a class="search-form--open" href="">
                                <i class="sprite-arrow-right"></i>
                                <span>{{trans('interface.expand')}}</span>
                                <span>{{trans('interface.collapse')}}</span>
                            </a>
                        @endif
                    </div>
                @endif

                @if(!empty($item->items) && !$item->__isMultiLot)
                    <div class="col-md-12 margin-bottom padding-side"><strong>Опис окремої частини або частин предмета закупівлі</strong></div>
                    @foreach($item->items as $one)
                        <div class="row margin-bottom">
                            <div class="col-md-4 col-md-push-8">
                                <div class="padding margin-bottom">
                                    {{!empty($one->quantity)?$one->quantity:''}} @if(!empty($one->unit->code)){{trans('measures.'.$one->unit->code.'.symbol')}}@endif
                                </div>
                            </div>
                            <div class="col-md-8 col-md-pull-4 description-wr{{!empty($one->description) && mb_strlen($one->description)>350?' croped':' open'}}">
                                @if (!empty($one->description_en))
                                    <div class="tender--description--text description padding-side">
                                        {!!nl2br($one->description_en)!!}
                                    </div>
                                    @if (mb_strlen($one->description_en)>350)
                                        <a class="search-form--open">
                                            <i class="sprite-arrow-down"></i>
                                            <span>{{trans('interface.expand')}}</span>
                                            <span>{{trans('interface.collapse')}}</span>
                                        </a>
                                    @endif
                                @endif
                                @if (!empty($one->classification))
                                    <div class="tender-date padding-left-more">CPV: {{$one->classification->scheme}} {{$one->classification->id}} — {{$one->classification->description}}</div>
                                @else
                                    <div class="tender-date padding-left-more">{{trans('tender.no_cpv')}}</div>
                                @endif
                                @if(!empty($one->additionalClassifications))
                                    @foreach($one->additionalClassifications as $classification)
                                        <div class="tender-date padding-left-more">{{trans('scheme.'.$classification->scheme)}}: {{$classification->id}} — {{$classification->description}}</div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        @endif
    @else
        <h3>Інформація про предмет закупівлі</h3>
        <div class="row">
            @if (!empty($item->description))
                <div class="col-md-12 description-wr margin-bottom">
                    <div class="tender--description--text description{{mb_strlen($item->description)>350?' croped':' open'}}">
                        {!!nl2br($item->description)!!}
                    </div>
                    @if (mb_strlen($item->description)>350)
                        <a class="search-form--open" href="">
                            <i class="sprite-arrow-right"></i>
                            <span>{{trans('interface.expand')}}</span>
                            <span>{{trans('interface.collapse')}}</span>
                        </a>
                    @endif
                </div>
            @endif
            @if(!empty($item->items) && !$item->__isMultiLot)
                <div class="col-md-12 margin-bottom padding-side"><strong>Опис окремої частини або частин предмета закупівлі</strong></div>
                @foreach($item->items as $one)
                    <div class="row margin-bottom">
                        <div class="col-md-4 col-md-push-8">
                            <div class="padding margin-bottom">
                                {{!empty($one->quantity)?$one->quantity:''}} @if(!empty($one->unit->code)){{trans('measures.'.$one->unit->code.'.symbol')}}@endif
                            </div>
                        </div>
                        <div class="col-md-8 col-md-pull-4 description-wr{{!empty($one->description) && mb_strlen($one->description)>350?' croped':' open'}}">
                            @if (!empty($one->description))
                                <div class="tender--description--text description padding-side">
                                    {!!nl2br($one->description)!!}
                                </div>
                                @if (mb_strlen($one->description)>350)
                                    <a class="search-form--open"><i class="sprite-arrow-down"></i>
                                        <span>{{trans('interface.expand')}}</span>
                                        <span>{{trans('interface.collapse')}}</span>
                                    </a>
                                @endif
                            @endif
                            @if (!empty($one->classification))
                                <div class="tender-date padding-left-more">{{trans('tender.cpv')}}: {{$one->classification->id}} — {{$one->classification->description}}</div>
                            @else
                                <div class="tender-date padding-left-more">{{trans('tender.no_cpv')}}</div>
                            @endif
                            @if(!empty($one->additionalClassifications))
                                @foreach($one->additionalClassifications as $classification)
                                    <div class="tender-date padding-left-more">{{trans('scheme.'.$classification->scheme)}}: {{$classification->id}} — {{$classification->description}}</div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    @endif
</div>