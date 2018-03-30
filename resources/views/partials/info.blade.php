<div class="column is-6-tablet is-4-fullhd">
    <div class="card" style="cursor:pointer;" onclick="window.location='{{ route('details', [$budget->id]) }}'">
        <header class="card-header">
            <p class="card-header-title">
                {{ $budget->name }}
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <nav class="level">
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Spent</p>
                        <p class="title has-text-primary">{{ number_format($budget->periods[0]->spent, 2, ',', '.') }} kr</p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Left</p>
                        <p class="title">{{ number_format($budget->periods[0]->balance, 2, ',', '.') }} kr</p>
                    </div>
                </div>
                </nav>
                <span class="help is-dark has-text-centered">Updated {{ $budget->updated_at->diffForHumans() }}</span>
            </div>
        </div>
        <footer class="card-footer" style="padding-left: 24px;padding-right: 24px;padding-top: 12px;padding-bottom: 12px;">
        <progress class="progress is-primary" value="{{ 100 - ($budget->periods[0]->balance/$budget->periods[0]->income)*100 }}" max="100">{{ 100 - ($budget->periods[0]->balance/$budget->periods[0]->income)*100 }}%</progress>
        </footer>
    </div>
</div>