<?php $type = $item[0] ?? 'pin'; ?>
<svg viewBox="0 0 32 32" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
<?php if ($type === 'pin'): ?><path d="M16 28s8-7.2 8-15a8 8 0 1 0-16 0c0 7.8 8 15 8 15Z"/><circle cx="16" cy="13" r="3"/>
<?php elseif ($type === 'pulse'): ?><path d="M3 17h5l3-8 5 15 4-11 3 4h6"/>
<?php elseif ($type === 'route'): ?><circle cx="7" cy="24" r="3"/><circle cx="25" cy="8" r="3"/><path d="M9 22c1-8 13-3 14-11"/>
<?php elseif ($type === 'shield'): ?><path d="M16 29S27 24 27 14V6L16 2 5 6v8c0 10 11 15 11 15Z"/><path d="m11 15 3 3 7-7"/>
<?php elseif ($type === 'sensor'): ?><path d="M16 5v14"/><circle cx="16" cy="23" r="5"/><path d="M11 7a8 8 0 0 0 0 11M21 7a8 8 0 0 1 0 11"/>
<?php else: ?><rect x="4" y="8" width="24" height="17" rx="3"/><circle cx="16" cy="16.5" r="5"/><path d="M10 8l2-3h8l2 3"/><?php endif; ?>
</svg>
