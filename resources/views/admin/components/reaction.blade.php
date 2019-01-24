<div id='reaction'>
  @component('admin.components.adminSection')
    @slot('sectionTitle')
      Hoe reageren?
    @endslot
    @slot('buttons')
      <a href="{!! route('reaction.index') !!}" class="btn btn-outline-primary">Naar de pagina</a>
      <a class="btn btn-success ml-2 text-white" href='{!! route('admin.create-scenario') !!}'><i class="fas fa-plus"></i> Toevoegen</a>
    @endslot
    @slot('description')
      Hier vind je een overzicht van alle situaties die de gebruikers te zien krijgen op de 'Hoe reageren?'-pagina. Elk scenario heeft een titel (de omschrijving), een goede reactie en een slechte reactie.
    @endslot
    @slot('body')
      @if(count($scenarios) > 0)
        <table class="table">
          <th></th>
          <th>Titel</th>
          <th>Goede reactie</th>
          <th>Slechte reactie</th>
          <th></th>
          @foreach ($scenarios as $scenario)
            <tr>
              <td>
                <a href='{!! route('admin.edit-scenario', ['id' => $scenario->id]) !!}' class="btn btn-warning btn-sm">Bewerken</a>
              </td>
              <td>@truncate($scenario->name, 50)</td>
              <td>@truncate($scenario->good, 50)</td>
              <td>@truncate($scenario->bad, 50)</td>
              <td>
                {{ Form::open(['route' => ['admin.delete-scenario', $scenario->id], 'method' => 'delete']) }}
                <button type="submit" class='btn btn-danger'>Verwijderen</button>
                {{ Form::close() }}
              </td>
            </tr>
          @endforeach
        </table>
      @else
        <p><strong>Er zijn nog geen scenario's toegevoegd! Voeg er een paar toe om op de site te tonen.</strong></p>
      @endif
    @endslot
  @endcomponent
</div>
