<div id='what'>
  @component('admin.components.adminSection')
    @slot('sectionTitle')
      Wat is het?
    @endslot
    @slot('buttons')
      <a href="{!! route('what.index') !!}" class="btn btn-outline-primary">Naar de pagina</a>
    @endslot
    @slot('description')
      Hier zie je alle secties van de 'Wat is het?'-pagina. Elke sectie heeft een titel en content.
    @endslot
    @slot('body')
      @if (count($whatSections) > 0)
        <table class="table">
          <th></th>
          <th>Titel</th>
          <th>Inhoud</th>
          @foreach ($whatSections as $section)
            <tr>
              <td>
                <a href='{!! route('admin.edit-content', ['id' => $section->id]) !!}' class="btn btn-warning btn-sm">Bewerken</a>
              </td>
              <td>@truncate($section->title, 50)</td>
              <td>@truncate($section->body, 50)</td>
            </tr>
          @endforeach
        </table>
      @else
        <p><strong>Er zijn nog geen secties voor deze pagina! Voeg er een paar toe om op de site te tonen.</strong></p>
      @endif
    @endslot
  @endcomponent
</div>
