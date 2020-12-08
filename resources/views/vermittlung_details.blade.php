@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Vermittlungsdetails</div>
                        <div class="card-body">

                            <ul class="list-group">
                                <li class="list-group-item">
                                    {{ $vermittlung->id }}
                                </li>
                                <li class="list-group-item">
                                    {{ $vermittlung->contractor }}
                                </li>
                                <li class="list-group-item">
                                    {{ $vermittlung->type_med }}
                                </li>
                                <li class="list-group-item">
                                    {{ $vermittlung->type_search }}
                                </li>
                                <li class="list-group-item">
                                    {{ $vermittlung->besondereAnforderungen }}
                                </li>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">Verträge</div>
                        <div class="card-body">

                            @if ($vertraege->count())
                                <ul class="list-group">
                                    @foreach ($vertraege as $vertrag)
                                        <li class="list-group-item">
                                            {{ $vertrag->strFilename }}
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>keine Verträge</p>
                            @endif

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">Zeiträume</div>
                        <div class="card-body">

                            @if ($zeitraueme->count())
                                <ul class="list-group">
                                    @foreach ($zeitraueme as $zeitraum)
                                        <li class="list-group-item">
                                            {{ $zeitraum->von }} - {{ $zeitraum->bis }}
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>keine Zeiträume</p>
                            @endif

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">Placements</div>
                        <div class="card-body">

                            @if ($placements->count())
                                <ul class="list-group">
                                    @foreach ($placements as $placement)
                                        <li class="list-group-item">
                                            {{ $placement->name }}

                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>keine Placements</p>
                            @endif

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">Rückmeldungen</div>
                        <div class="card-body">


                            @if ($rueckmeldungen->count())
                                <ul class="list-group">
                                    @foreach ($rueckmeldungen as $rueckmeldung)
                                        <li class="list-group-item">
                                            {{ $rueckmeldung->name }}
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>keine Rückmeldungen</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
