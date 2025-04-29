@extends('backend.layouts.main')

@section('content')
<div class="app-title">
    <div>
        <h1><i class="bi bi-envelope-at"></i> Mailbox</h1>
        <p>A Mailbox page sample</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
        <li class="breadcrumb-item"><a href="{{ route('page-mailbox') }}">Mailbox</a></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="d-grid">
            <a class="mb-2 btn btn-primary btn-block" href="{{ route('mail.compose') }}">Compose Mail</a>
        </div>
        <div class="tile p-0">
            <h4 class="tile-title folder-head">Folders</h4>
            <div class="tile-body">
                <ul class="nav nav-pills flex-column mail-nav">
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-start" href="{{ route('mail.inbox') }}">
                            <span><i class="bi bi-inbox me-1 fs-5"></i> Inbox</span>
                            <span class="badge bg-primary rounded-pill">12</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mail.sent') }}">
                            <i class="bi bi-envelope me-1 fs-5"></i> Sent
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mail.drafts') }}">
                            <i class="bi bi-journal-text me-1 fs-5"></i> Drafts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-start" href="{{ route('mail.junk') }}">
                            <span><i class="bi bi-funnel me-1 fs-5"></i> Junk</span>
                            <span class="badge bg-primary rounded-pill">8</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mail.trash') }}">
                            <i class="bi bi-trash me-1 fs-5"></i> Trash
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="tile">
            <div class="mailbox-controls">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="select-all">
                    <label class="form-check-label" for="select-all"></label>
                </div>
                <div class="btn-group">
                    <button class="btn btn-primary btn-sm" type="button"><i class="bi bi-trash fs-5"></i></button>
                    <button class="btn btn-primary btn-sm" type="button"><i class="bi bi-reply fs-5"></i></button>
                    <button class="btn btn-primary btn-sm" type="button"><i class="bi bi-share fs-5"></i></button>
                    <button class="btn btn-primary btn-sm" type="button"><i class="bi bi-arrow-clockwise fs-5"></i></button>
                </div>
            </div>

            <div class="table-responsive mailbox-messages">
                <table class="table table-hover">
                    <tbody>
                        @foreach($emails as $email)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="email-{{ $email->id }}">
                                    <label class="form-check-label" for="email-{{ $email->id }}"></label>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('mail.toggle-star', $email->id) }}">
                                    <i class="bi bi-star{{ $email->starred ? '-fill' : '' }}"></i>
                                </a>
                            </td>
                            <td><a href="{{ route('mail.read', $email->id) }}">{{ $email->sender }}</a></td>
                            <td class="mail-subject">
                                <b>{{ $email->subject }}</b> - {{ Str::limit($email->body, 50) }}
                            </td>
                            <td>
                                @if($email->has_attachment)
                                <i class="bi bi-paperclip"></i>
                                @endif
                            </td>
                            <td>{{ $email->received_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="text-end">
                <span class="text-muted mr-2">Showing {{ $emails->firstItem() }}-{{ $emails->lastItem() }} of {{ $emails->total() }}</span>
                <div class="btn-group ms-3">
                    {{ $emails->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection