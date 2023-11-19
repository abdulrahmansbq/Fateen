<?php

namespace App\Enums\Status;

enum MessageEmbeddingStatus: int
{
    case PENDING = 1;

    case EMBEDDED = 2;

    case EXPLAINED = 3;

    case DETAILED = 4;

    case ANSWERED = 5;

    case FAILED = 6;

    case SKIPPED = 7;

    public function isPending(): bool
    {
        return $this === self::PENDING;
    }

    public function isEmbedded(): bool
    {
        return $this === self::EMBEDDED;
    }

    public function isExplained(): bool
    {
        return $this === self::EXPLAINED;
    }

    public function isAnswered(): bool
    {
        return $this === self::ANSWERED;
    }

    public function isFailed(): bool
    {
        return $this === self::FAILED;
    }

    public function isSkipped(): bool
    {
        return $this === self::SKIPPED;
    }

    public function name() {
        return match ($this) {
            self::PENDING => 'في الإنتظار',
            self::EMBEDDED => 'مضمنة',
            self::EXPLAINED => 'مفسرة',
            self::ANSWERED => 'مجابة',
            self::FAILED => 'فشلت',
            self::SKIPPED => 'تم تخطيها',
        };
    }
}
