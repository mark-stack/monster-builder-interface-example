<!-- HTML generated using hilite.me --><div style="background: #202020; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #cd2828; font-weight: bold">&lt;?php</span>

    <span style="color: #6ab825; font-weight: bold">class</span> <span style="color: #447fcf; text-decoration: underline">MonsterController</span> <span style="color: #6ab825; font-weight: bold">extends</span> <span style="color: #d0d0d0">Controller</span>
    <span style="color: #d0d0d0">{</span>
        <span style="color: #6ab825; font-weight: bold">public</span> <span style="color: #6ab825; font-weight: bold">function</span> <span style="color: #447fcf">store</span><span style="color: #d0d0d0">(MonsterStoreRequest</span> <span style="color: #40ffff">$request</span><span style="color: #d0d0d0">){</span>
    
            <span style="color: #999999; font-style: italic">//Create using validation array</span>
            <span style="color: #40ffff">$new_monster</span> <span style="color: #d0d0d0">=</span> <span style="color: #d0d0d0">Monster::</span><span style="color: #bbbbbb">create</span><span style="color: #d0d0d0">(</span><span style="color: #40ffff">$request</span><span style="color: #d0d0d0">-&gt;</span><span style="color: #bbbbbb">validated</span><span style="color: #d0d0d0">());</span>
     
    </pre></div>
    