@if (is_array($activity) || $activity->enriched())
    @if (isset($prefix))
        @if (array_key_exists('activities', $activity))
            @include("aggregated_activity.{$prefix}_{$activity['verb']}", ['activity'=>$activity])
        @else
            @include("/activity.{$prefix}_{$activity['verb']}", ['activity'=>$activity])
        @endif
    @else
        @if (array_key_exists('activities', $activity))
            @include("aggregated_activity.{$activity['verb']}", ['activity'=>$activity])
        @else
            @include("/activity.{$activity['verb']}", ['activity'=>$activity])
        @endif
    @endif
@endif
