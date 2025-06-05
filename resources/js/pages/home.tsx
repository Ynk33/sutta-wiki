import H1 from "@/components/html/h1";
import { Entry } from "@/types";
import { Head } from "@inertiajs/react";
import Markdown from "@/lib/markdown";

export default function Home({ latestEntries }: { latestEntries: Entry[] }) {

    return (
        <>
            <Head title="Welcome" />
            <div>
                <div className="flex w-full lg:grow">
                    {latestEntries.map(entry => (
                        <div key={entry.id} className="p-4 border rounded-lg m-2">
                            <H1>{entry.name}</H1>

                            <Markdown>
                                {entry.content}
                            </Markdown>
                        </div>
                    ))}
                </div>
            </div>
        </>
    );
}