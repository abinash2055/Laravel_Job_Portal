
<h2>
    {{ $job->title }}
</h2>

<p>
    !!! CONGRATULATION !!, the job you had mailed us is now live in our website.
</p>

<p>
    <a href="{{ url('/jobs/'.$job->id) }}">You can view your job from this link within the Job listing Page.</a>
</p>
