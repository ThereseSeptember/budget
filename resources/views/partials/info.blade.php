<div class="column is-4">
    <div class="card" style="cursor:pointer;" onclick="window.location='{{ route('details', [3]) }}'">
        <header class="card-header">
            <p class="card-header-title">
                MAD!
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <nav class="level">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Spent</p>
                        <p class="title has-text-primary">3.456,20 kr</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Left</p>
                        <p class="title">1.132,01 kr</p>
                    </div>
                </div>
                </nav>
                <span class="help is-dark has-text-centered">Updated 22 hours ago</span>
            </div>
        </div>
        <footer class="card-footer" style="padding-left: 24px;padding-right: 24px;padding-top: 12px;padding-bottom: 12px;">
            <progress class="progress is-primary" value="80" max="100">80%</progress>
        </footer>
    </div>
</div>