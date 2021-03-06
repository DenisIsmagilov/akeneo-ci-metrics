<?php

declare(strict_types=1);

namespace App\Model\Jenkins\Pipeline;

use App\Model\Jenkins\Branch\Branch;

/**
 * @author Alexandre Hocquard <alexandre.hocquard@akeneo.com>
 */
class Pipeline
{
    /** @var PipelineName */
    private $name;

    /** @var Branch[] */
    private $branches;

    /**
     * @param PipelineName $name
     * @param Branch[]     $branches
     */
    public function __construct(PipelineName $name, array $branches)
    {
        $this->name = $name;
        $this->branches = $branches;
    }

    public function name(): PipelineName
    {
        return $this->name;
    }

    public function branches(): array
    {
        return $this->branches;
    }

    public function pullRequestBranches(): array
    {
        $branches = array_filter($this->branches(), function(Branch $branch) {
            return $branch->isPullRequestBranch();
        });

        return array_values($branches);
    }

    public function originBranches(): array
    {
        $branches = array_filter($this->branches(), function(Branch $branch) {
            return $branch->isOriginBranch();
        });

        return array_values($branches);
    }
}
