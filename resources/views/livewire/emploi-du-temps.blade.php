<div class="site-section" id="emploi">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8 section-heading">
                <h2 class="heading mb-3">Emploi du temps</h2>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Jour</th>
                        <th scope="col">Groupes</th>
                        <th scope="col">Moniteurs</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jour as $j)
                    <tr>
                        <td style="color:tomato">{{$j}}</td>
                        <td>
                            @foreach($emploiG as $i)
                                @if($i->jour == $j)
                                    {{$i->nomgroupe}} :<span style="margin:1em">{{$i->heurDebut}} - {{$i->heurFin}}</span><hr>
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach($emploiM as $m)
                                @if($m->jour == $j)
                                    {{$m->nom}} {{$m->prenom}} :<span style="margin:1em">{{$m->heurDebut}} - {{$m->heurFin}}</span><hr>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
