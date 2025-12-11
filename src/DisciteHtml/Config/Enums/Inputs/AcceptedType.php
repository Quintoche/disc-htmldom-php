<?php

namespace DisciteHtml\Config\Enums\Inputs;

enum AcceptedType : string
{
    case IMAGES = 'image/*';

    case IMAGE_JPG = '.jpg';

    case IMAGE_JPEG = '.jpeg';

    case IMAGE_PNG = '.png';

    case IMAGE_GIF = '.gif';

    case IMAGE_SVG = '.svg';

    case IMAGE_WEBP = '.webp';

    case IMAGE_HEIC = '.heic';


    case VIDEOS = 'video/*';

    case VIDEO_MP4 = '.mp4';

    case VIDEO_MOV = '.mov';

    case VIDEO_WEBM = '.webm';

    case VIDEO_AVI = '.avi';

    case VIDEO_MKV = '.mkv';


    case AUDIOS = 'audio/*';

    case AUDIO_MP3 = '.mp3';

    case AUDIO_WAV = '.wav';

    case AUDIO_OGG = '.ogg';

    case AUDIO_M4A = '.m4a';

    case AUDIO_FLAC = '.flac';


    case FILES = '.pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx';

    case FILE_PDF = '.pdf';

    case FILE_DOC = '.doc';

    case FILE_DOCX = '.docx';

    case FILE_XLS = '.xls';

    case FILE_XLSX = '.xlsx';

    case FILE_PPT = '.ppt';

    case FILE_PPTX = '.pptx';


    case TEXTS = '.txt,.csv,.json,.xml,.md';
    
    case TEXT_TXT = '.txt';

    case TEXT_CSV = '.csv';

    case TEXT_JSON = '.json';

    case TEXT_XML = '.xml';

    case TEXT_MD = '.md';


    case COMPRESSEDS = '.zip,.rar,.7z,.tar,.gz';

    case COMPRESSED_ZIP = '.zip';

    case COMPRESSED_RAR = '.rar';

    case COMPRESSED_SEVENZ = '.7z';

    case COMPRESSED_TAR = '.tar';

    case COMPRESSED_GZ = '.gz';
    

    case DEVS = '.html,.css,.js,.php,.bin';
    
    case DEV_HTML = '.html';

    case DEV_CSS = '.css';

    case DEV_JS = '.js';

    case DEV_PHP = '.php';

    case DEV_BIN = '.bin';

    case UNKNOWN = '*/*';


}

?>