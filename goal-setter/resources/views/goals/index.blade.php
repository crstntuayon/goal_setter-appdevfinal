@extends('layout')

@section('content')
<style>
    :root {
           
            
            --shadow-light: 0 2px 15px rgba(0, 0, 0, 0.08);
            --shadow-medium: 0 8px 30px rgba(0, 0, 0, 0.12);
            --shadow-heavy: 0 20px 60px rgba(0, 0, 0, 0.15);
            
            --border-radius: 12px;
            --border-radius-lg: 20px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--primary-gradient);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(120, 219, 255, 0.3) 0%, transparent 50%);
            animation: backgroundFloat 20s ease-in-out infinite;
            z-index: -1;
        }

        @keyframes backgroundFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-30px) rotate(1deg); }
            66% { transform: translateY(15px) rotate(-1deg); }
        }

        /* Floating particles */
        .particle {
            position: fixed;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            pointer-events: none;
            animation: float 15s infinite linear;
            z-index: -1;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(0px) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) translateX(100px) rotate(360deg);
                opacity: 0;
            }
        }
    .main-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        animation: slideUp 0.6s ease-out;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid #f0f0f0;
    }

    .header h1 {
        color: #333;
        font-size: 2.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin: 0;
    }

    .btn {
        padding: 12px 24px;
        border: none;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        position: relative;
        overflow: hidden;
        text-decoration: none;
        display: inline-block;
    }

    .btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .btn:hover::before {
        left: 100%;
    }

    .btn-primary {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        color: white;
        text-decoration: none;
    }

    .btn-danger {
        background: linear-gradient(135deg, #ff6b6b, #ee5a24);
        color: white;
        box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
    }

    .btn-danger:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(255, 107, 107, 0.4);
        color: white;
        text-decoration: none;
    }

    .btn-secondary {
        background: linear-gradient(135deg, #95e1d3, #48cae4);
        color: white;
        box-shadow: 0 4px 15px rgba(149, 225, 211, 0.3);
    }

    .btn-secondary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(149, 225, 211, 0.4);
        color: white;
        text-decoration: none;
    }

    .btn-warning {
        background: linear-gradient(135deg, #ffa726, #ff9800);
        color: white;
        box-shadow: 0 4px 15px rgba(255, 167, 38, 0.3);
    }

    .btn-warning:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(255, 167, 38, 0.4);
        color: white;
        text-decoration: none;
    }

    .btn-success {
        background: linear-gradient(135deg, #4caf50, #45a049);
        color: white;
        box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
    }

    .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(76, 175, 80, 0.4);
        color: white;
        text-decoration: none;
    }

    .btn-sm {
        padding: 8px 16px;
        font-size: 14px;
    }

    .search-container {
        display: flex;
        gap: 15px;
        margin-bottom: 30px;
        align-items: center;
    }

    .search-input {
        flex: 1;
        padding: 15px 20px;
        border: 2px solid #e0e0e0;
        border-radius: 50px;
        font-size: 16px;
        outline: none;
        transition: all 0.3s ease;
        background: white;
    }

    .search-input:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        transform: translateY(-2px);
    }

    .success-message {
        background: linear-gradient(135deg, #4caf50, #45a049);
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        animation: slideDown 0.5s ease;
        box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .goal-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
        position: relative;
        overflow: hidden;
    }

    .goal-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .goal-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .goal-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 10px;
    }

    .goal-description {
        color: #666;
        font-size: 16px;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .progress-container {
        margin-bottom: 20px;
    }

    .progress-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .progress-text {
        font-weight: 600;
        color: #333;
    }

    .progress-percentage {
        font-weight: 700;
        color: #667eea;
        font-size: 18px;
    }

    .progress-bar {
        width: 100%;
        height: 10px;
        background: #f0f0f0;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(135deg, #667eea, #764ba2);
        border-radius: 10px;
        transition: width 0.8s ease;
        position: relative;
    }

    .progress-fill::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    .goal-actions {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-bottom: 20px;
        align-items: center;
    }

    .progress-input {
        width: 100px;
        padding: 8px 12px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        text-align: center;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .progress-input:focus {
        border-color: #667eea;
        outline: none;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .goal-meta {
        display: flex;
        gap: 20px;
        font-size: 12px;
        color: #888;
        margin-bottom: 15px;
        flex-wrap: wrap;
    }

    .status-badge {
        padding: 6px 15px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
        display: inline-block;
    }

    .status-completed {
        background: linear-gradient(135deg, #4caf50, #45a049);
        color: white;
    }

    .status-progress {
        background: linear-gradient(135deg, #ffa726, #ff9800);
        color: white;
    }

    .notes-section {
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid #f0f0f0;
    }

    .notes-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .notes-title {
        font-weight: 600;
        color: #333;
        font-size: 16px;
    }

    .notes-list {
        display: none;
        animation: fadeIn 0.3s ease;
    }

    .notes-list.show {
        display: block;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .note-item {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 10px;
        border-left: 3px solid #667eea;
        position: relative;
        transition: all 0.3s ease;
    }

    .note-item:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }

    .note-text {
        margin-bottom: 8px;
        line-height: 1.5;
        color: #333;
    }

    .note-date {
        font-size: 11px;
        color: #888;
    }

    .add-note-form {
        display: none;
        margin-top: 15px;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 10px;
        animation: slideDown 0.3s ease;
    }

    .add-note-form.show {
        display: block;
    }

    .note-textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        resize: vertical;
        min-height: 100px;
        font-family: inherit;
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .note-textarea:focus {
        border-color: #667eea;
        outline: none;
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .no-goals {
        text-align: center;
        padding: 60px 20px;
        color: #666;
        font-size: 18px;
    }

    .no-goals::before {
        content: "🎯";
        display: block;
        font-size: 4rem;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .header {
            flex-direction: column;
            gap: 15px;
        }
        
        .search-container {
            flex-direction: column;
        }
        
        .goal-actions {
            justify-content: center;
        }

        .goal-meta {
            flex-direction: column;
            gap: 5px;
        }
    }
</style>


    <div class="header">
        <h1>🎯 My Goals</h1>
        <div style="display: flex; gap: 15px; align-items: center;">
            <a href="{{ route('goals.create') }}" class="btn btn-primary">Add Goal</a>
            <a href="{{ route('auth.logout') }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
        </div>
    </div>

    <div class="search-container">
        <form id="searchForm" action="{{ route('goals.index') }}" method="GET" style="display: flex; gap: 15px; width: 100%;">
            <input 
                type="text" 
                name="search" 
                id="searchInput"
                placeholder="Search your goals..." 
                value="{{ request('search') }}"
                class="search-input"
            >
            <button type="submit" class="btn btn-secondary">Search</button>
        </form>
    </div>

    @if(session('success'))
        <div id="successMessage" class="success-message">
            ✅ {{ session('success') }}
        </div>
    @endif

    @if($goals->count())
        @foreach ($goals as $goal)
            <div class="goal-card">
                <div class="goal-title">{{ $goal->title }}</div>
                <div class="goal-description">{{ $goal->description }}</div>
                
                <div class="goal-meta">
                    <span>📅 Created: {{ $goal->created_at->format('Y-m-d H:i') }}</span>
                    <span>🔄 Updated: {{ $goal->updated_at->format('Y-m-d H:i') }}</span>
                </div>

                <span class="status-badge {{ $goal->progress >= $goal->target ? 'status-completed' : 'status-progress' }}">
                    {{ $goal->progress >= $goal->target ? '✅ Completed' : '🔄 In Progress' }}
                </span>

                <div class="progress-container">
                    <div class="progress-header">
                        <span class="progress-text">Progress: {{ $goal->progress }} / {{ $goal->target }}</span>
                        <span class="progress-percentage">{{ round(($goal->progress / $goal->target) * 100) }}%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: {{ ($goal->progress / $goal->target) * 100 }}%"></div>
                    </div>
                </div>

                <div class="goal-actions">
                    <form action="{{ route('goals.update', $goal) }}" method="POST" style="display: flex; gap: 10px; align-items: center;">
                        @csrf @method('PUT')
                        <input type="number" name="progress" value="{{ $goal->progress }}" min="0" max="{{ $goal->target }}" class="progress-input" placeholder="Progress">
                        <button type="submit" class="btn btn-warning btn-sm">Update Progress</button>
                    </form>
                    
                    <a class="btn btn-success btn-sm" href="{{ route('goals.edit', $goal->id) }}">✏️ Edit Goal</a>
                    
                    @if ($goal->progress >= $goal->target)
                        <form action="{{ route('goals.destroy', $goal) }}" method="POST" style="display: inline-block;">
                            @csrf @method('DELETE')
                            <button type="submit" 
                                onclick="return confirm('Are you sure you want to delete this completed goal?')"
                                class="btn btn-danger btn-sm">
                                🗑️ Delete
                            </button>
                        </form>
                    @endif
                </div>

                <div class="notes-section">
                    <div class="notes-header">
                    
                        <span class="notes-title">📝 Notes ({{ $goal->notes ? $goal->notes->count() : 0 }})</span>
                         <form action="{{ route('goals.notes.store', $goal->id) }}" method="POST">
                         @csrf
   
                        </form>
                        <div style="display: flex; gap: 10px;">
                            <button class="btn btn-secondary btn-sm" onclick="toggleNotes({{ $goal->id }})">
                                <span id="toggle-text-{{ $goal->id }}">Show Notes</span>
                            </button>
                            <button class="btn btn-primary btn-sm" onclick="toggleAddNoteForm({{ $goal->id }})">
                                 Add Note
                            </button>
                        </div>
                    </div>
                    
                    <div id="notes-list-{{ $goal->id }}" class="notes-list">
                        
                        @if($goal->notes && $goal->notes->count() > 0)
                            @foreach($goal->notes as $note)
                                <div class="note-item">
                                    <div class="note-text">{{ $note->content }}</div>
                                    <div class="note-date">{{ $note->created_at->format('M d, Y H:i') }}</div>
                                    </button>
                                </div>
                            @endforeach
                        @else
                            <div class="note-item" style="text-align: center; color: #888;">
                                No notes yet. Add your first note above! 📝
                            </div>
                        @endif
                        
                    </div>

                    <div id="add-note-form-{{ $goal->id }}" class="add-note-form">
                        <form action="{{ route('goals.notes.store', $goal->id) }}" method="POST">
                            @csrf
                            <textarea 
                                name="content" 
                                class="note-textarea" 
                                placeholder="Add your note here... Share your thoughts, progress updates, or reminders!" 
                                required
                            ></textarea>
                            <div style="display: flex; gap: 10px; justify-content: flex-end;">
                                <button type="button" class="btn btn-secondary btn-sm" onclick="cancelAddNote({{ $goal->id }})">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-sm">💾 Save Note</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="no-goals">
            <p>No goals found. Start your journey by creating your first goal!</p>
            <a href="{{ route('goals.create') }}" class="btn btn-primary" style="margin-top: 20px;">Create Your First Goal</a>
        </div>
    @endif
</div>

<script>
    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const searchForm = document.getElementById('searchForm');

    searchInput.addEventListener('input', function () {
        if (this.value === '') {
            searchForm.submit();
        }
    });

    // Auto-hide success message
    @if(session('success'))
        setTimeout(function() {
            const message = document.getElementById('successMessage');
            if (message) {
                message.style.transition = 'all 0.5s ease';
                message.style.opacity = '0';
                message.style.transform = 'translateY(-20px)';
                setTimeout(() => message.remove(), 500);
            }
        }, 4000);
    @endif

    // Notes functionality
    function toggleNotes(goalId) {
        const notesList = document.getElementById(`notes-list-${goalId}`);
        const toggleText = document.getElementById(`toggle-text-${goalId}`);
        
        if (notesList.classList.contains('show')) {
            notesList.classList.remove('show');
            toggleText.textContent = 'Show Notes';
        } else {
            notesList.classList.add('show');
            toggleText.textContent = 'Hide Notes';
        }
    }

    function toggleAddNoteForm(goalId) {
        const form = document.getElementById(`add-note-form-${goalId}`);
        const textarea = form.querySelector('textarea');
        
        if (form.classList.contains('show')) {
            form.classList.remove('show');
        } else {
            form.classList.add('show');
            setTimeout(() => textarea.focus(), 300);
        }
    }

    function cancelAddNote(goalId) {
        const form = document.getElementById(`add-note-form-${goalId}`);
        const textarea = form.querySelector('textarea');
        
        form.classList.remove('show');
        textarea.value = '';
    }

    // Enhanced animations
    document.addEventListener('DOMContentLoaded', function() {
        // Animate goal cards on load
        const goalCards = document.querySelectorAll('.goal-card');
        goalCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });

        // Progress bar animation
        const progressBars = document.querySelectorAll('.progress-fill');
        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.width = width;
            }, 500);
        });
    });

    // Form submission with loading state
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '⏳ Processing...';
                submitBtn.disabled = true;
                
                // Re-enable after 3 seconds as fallback
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 3000);
            }
        });
    });
</script>

@endsection