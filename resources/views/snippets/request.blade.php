<!-- HTML generated using hilite.me --><div style="background: #202020; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #cd2828; font-weight: bold">&lt;?php</span>

    <span style="color: #6ab825; font-weight: bold">namespace</span> <span style="color: #d0d0d0">App\Http\Requests;</span>

    <span style="color: #6ab825; font-weight: bold">use</span> <span style="color: #d0d0d0">Illuminate\Foundation\Http\FormRequest;</span>
    
    <span style="color: #6ab825; font-weight: bold">class</span> <span style="color: #447fcf; text-decoration: underline">MonsterStoreRequest</span> <span style="color: #6ab825; font-weight: bold">extends</span> <span style="color: #d0d0d0">FormRequest</span>
    <span style="color: #d0d0d0">{</span>
        <span style="color: #6ab825; font-weight: bold">public</span> <span style="color: #6ab825; font-weight: bold">function</span> <span style="color: #447fcf">authorize</span><span style="color: #d0d0d0">()</span>
        <span style="color: #d0d0d0">{</span>
            <span style="color: #6ab825; font-weight: bold">return</span> <span style="color: #6ab825; font-weight: bold">true</span><span style="color: #d0d0d0">;</span>
        <span style="color: #d0d0d0">}</span>
    
        <span style="color: #6ab825; font-weight: bold">public</span> <span style="color: #6ab825; font-weight: bold">function</span> <span style="color: #447fcf">rules</span><span style="color: #d0d0d0">()</span>
        <span style="color: #d0d0d0">{</span>
            <span style="color: #6ab825; font-weight: bold">return</span> <span style="color: #d0d0d0">[</span>
                <span style="color: #ed9d13">&#39;type&#39;</span> <span style="color: #d0d0d0">=&gt;</span> <span style="color: #ed9d13">&#39;required&#39;</span><span style="color: #d0d0d0">,</span>
                <span style="color: #ed9d13">&#39;arms&#39;</span> <span style="color: #d0d0d0">=&gt;</span> <span style="color: #ed9d13">&#39;required|digits_between:0,6&#39;</span><span style="color: #d0d0d0">,</span>
                <span style="color: #ed9d13">&#39;legs&#39;</span> <span style="color: #d0d0d0">=&gt;</span> <span style="color: #ed9d13">&#39;required|digits_between:0,8&#39;</span><span style="color: #d0d0d0">,</span>
            <span style="color: #d0d0d0">];</span>
        <span style="color: #d0d0d0">}</span>
    <span style="color: #d0d0d0">}</span>
    </pre></div>
    