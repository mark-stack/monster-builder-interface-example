<!-- HTML generated using hilite.me --><div style="background: #202020; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #cd2828; font-weight: bold">&lt;?php</span>

    <span style="color: #6ab825; font-weight: bold">namespace</span> <span style="color: #d0d0d0">App\Services;</span>

    <span style="color: #6ab825; font-weight: bold">use</span> <span style="color: #d0d0d0">App\MonsterTemplates\Goblin;</span>
    <span style="color: #6ab825; font-weight: bold">use</span> <span style="color: #d0d0d0">App\MonsterTemplates\Dragon;</span>
    
    <span style="color: #6ab825; font-weight: bold">class</span> <span style="color: #447fcf; text-decoration: underline">MonsterObjectsService</span> <span style="color: #d0d0d0">{</span>
    
        <span style="color: #6ab825; font-weight: bold">public</span> <span style="color: #6ab825; font-weight: bold">function</span> <span style="color: #447fcf">monsterObjectsArray</span><span style="color: #d0d0d0">(){</span>
    
            <span style="color: #999999; font-style: italic">//List all monster classes</span>
            <span style="color: #40ffff">$monster_objects</span> <span style="color: #d0d0d0">=</span> <span style="color: #d0d0d0">[</span>
                <span style="color: #ed9d13">&#39;dragon&#39;</span> <span style="color: #d0d0d0">=&gt;</span> <span style="color: #6ab825; font-weight: bold">new</span> <span style="color: #d0d0d0">Dragon(),</span>
                <span style="color: #ed9d13">&#39;goblin&#39;</span> <span style="color: #d0d0d0">=&gt;</span> <span style="color: #6ab825; font-weight: bold">new</span> <span style="color: #d0d0d0">Goblin()</span>
            <span style="color: #d0d0d0">];</span>
    
            <span style="color: #6ab825; font-weight: bold">return</span> <span style="color: #40ffff">$monster_objects</span><span style="color: #d0d0d0">;</span>
        <span style="color: #d0d0d0">}</span>
        
    </pre></div>
    