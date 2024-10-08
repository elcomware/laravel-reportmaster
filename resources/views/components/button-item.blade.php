@props([
    'path',
    'label',
    'size'=>30,
    'printer'=>false,
    'downloader'=>false,
    'exporter'=>false
    ])

<button class="btn" type="button" @isset($path) onclick="location.href='{{$path}}';" @endisset value="{{$label}}">
        <span style="font-size: {{$size}}px; margin: 6px; vertical-align: center; horiz-align: center ">

            @if($printer)
                <svg width="{{$size}}px" height="{{$size}}px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path fill-rule="evenodd"
                         clip-rule="evenodd"
                         d="M17.25 3.75H6.75V7.5H4.5L3.75 8.25V16.5L4.5 17.25H6.75V21H17.25V17.25H19.5L20.25
                         16.5V8.25L19.5 7.5H17.25V3.75ZM8.25 19.5V17.25V15.75V15H15.75V15.75V17.25V19.5H8.25ZM17.25
                         13.5V15.75H18.75V9H5.25V15.75H6.75V13.5H17.25ZM15.75 7.5V5.25H8.25V7.5H15.75ZM16.5
                         12V10.5H15V12H16.5Z"
                         fill="#080341"/>
                </svg>
            @elseif($downloader)
                <svg width="{{$size}}px" height="{{$size}}px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path fill-rule="evenodd" clip-rule="evenodd" d="M12 15.9853L15.182 12.8033L14.1213 11.7427L12.75 13.114L12.75 5.25L11.25 5.25L11.25 13.114L9.8787 11.7427L8.81804 12.8033L12 15.9853ZM12 13.864L12 13.864L12.0001 13.864L12 13.864Z" fill="#080341"/>
                   <path d="M18 17.25L18 18.75L6 18.75L6 17.25L18 17.25Z" fill="#080341"/>
               </svg>
            @elseif($exporter)
               <svg width="{{$size}}px" height="{{$size}}px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path fill-rule="evenodd"
                         clip-rule="evenodd"
                         d="M5.25 11.25L6 10.5L9.74999 10.5L9.74999 12L6.75 12L6.75 18L17.25 18L17.25 12L14.25 12L14.25 10.5L18 10.5L18.75 11.25L18.75 18.75L18 19.5L6 19.5L5.25 18.75L5.25 11.25ZM12.75 7.06064L12.75 15L11.25 15L11.25 7.06075L9.53039 8.78037L8.46973 7.71971L12.0001 4.18937L15.5304 7.71971L14.4697 8.78037L12.75 7.06064Z"
                         fill="#080341"/>
               </svg>
            @else
                {{$slot}}
            @endif
        </span>
    <div  class="animate-normal "> {{ucfirst($label)}}</div>
</button>
