<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Press Contacts
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <strong>Below is a list of available spokespersons for contact by media and press</strong>
        @foreach($pressContacts as $pressContact)
        <div class="mt-2">
          <p>{{ $pressContact->name }}<br />
            {{ $pressContact->mobile_number}}<br />
            {{ $pressContact->email }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Animal Rebellion UK Teams / Emails
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <ul>
          @foreach($teamContacts as $teamContact)
          <li>{{ $teamContact->team_name }} - <a href="mailto:{{ $teamContact->email }}">{{ $teamContact->email }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          FAQs
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        @foreach($faqs as $faq)
        <div>
          <h4>{{ $faq->question }}</h4>
          <p>{{ $faq->answer }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
