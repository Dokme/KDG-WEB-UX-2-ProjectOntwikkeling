<div id='testimonials'>
  @component('admin.components.adminSection')
    @slot('sectionTitle')
      Hun verhalen
    @endslot
    @slot('buttons')
      <a href="{!! route('testimonials.index') !!}" class="btn btn-outline-primary">Naar de pagina</a>
    @endslot
    @slot('description')
      Hier heb je een overzicht van alle verhalen. Indien er nieuwe verhalen zijn, dienen ze nagekeken te worden en vervolgens gepubliceerd of weerhouden worden.
    @endslot
    @slot('body')
      @if (count($unseen) > 0 || count($seen) > 0)
        <table class='table table-sm table-responsive'>
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>Titel</th>
              <th>Content</th>
              <th>Gepost op</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @if (isset($unseen))
            @foreach ($unseen as $testimonial)
            <tr>
              <td title='Dit verhaal moet nagekeken worden.'><i class="fas fa-exclamation-circle red"></i></td>
              <td>
                <a href='{!! route('admin.review', ['id' => $testimonial->id]) !!}' class="btn btn-warning btn-sm">Bekijken</a>
              </td>
              <td>@truncate($testimonial->title, 50)</td>
              @php
                $body = strip_tags($testimonial->body);
                @endphp
              <td>@truncate($body, 50)</td>
              <td><date>{{ $testimonial->created_at }}</date></td>
              <td class='d-flex justify-content-end'>
                <div class="btn-group-vertical">
                  <a href='{!! route('admin.accept_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-success btn-sm">Publiceren</a>
                  <a href='{!! route('admin.reject_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-danger btn-sm">Weerhouden</a>
                </div>
              </td>
            </tr>
            @endforeach
            @foreach ($seen as $testimonial)
            <tr>
              @if (!$testimonial->highlight && $testimonial->published)
              <td>
                <a href="{!! route('admin.highlight', ['id' => $testimonial->id]) !!}" class='no-highlight text-dark'><i class="far fa-star"></i></a>
              </td>
              @elseif ($testimonial->published)
              <td>
                <a href="{!! route('admin.highlight', ['id' => $testimonial->id]) !!}"><i class="fas fa-star yellow"></i></a>
              </td>
              @else
              <td></td>
              @endif
              <td>
                <a href='{!! route('admin.review', ['id' => $testimonial->id]) !!}' class="btn btn-warning btn-sm">Bekijken</a>
              </td>
              <td>@truncate($testimonial->title, 50)</td>
              @php
                $body = strip_tags($testimonial->body);
                @endphp
              <td>@truncate($body, 50)</td>
              <td><date>{{ $testimonial->created_at }}</date></td>
              <td class='d-flex justify-content-end'>
                @if ($testimonial->published)
                <a href='{!! route('admin.reject_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-danger btn-sm">Weerhouden</a>
                @else
                <a href='{!! route('admin.accept_testimonial', ['id' => $testimonial->id]) !!}' class="btn btn-success btn-sm">Publiceren</a>
                @endif
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        @endif
      @else
        <p><strong>Bezoekers stuurden nog geen verhalen in.</strong></p>
      @endif
    @endslot
  @endcomponent
</div>
