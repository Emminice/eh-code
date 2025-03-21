<h2>
    {{ $job->title }}
</h2>
<p>
    Congrats! Your job is now live on our website. 
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">
        <button class="btn btn-primary">View Your Job Listing</button>
    </a>
</p>
