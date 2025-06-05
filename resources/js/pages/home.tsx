import { Entry } from "@/types";
import { Head } from "@inertiajs/react";

export default function Home({ latestEntries }: { latestEntries: Entry[] }) {

    return (
        <>
            <Head title="Welcome" />
            <div>
                <div className="flex w-full lg:grow">
                    {latestEntries.map(entry => (
                        <div key={entry.id} className="p-4 border rounded-lg m-2">
                            <h2 className="text-lg font-bold">{entry.name}</h2>
                            <p>{entry.description}</p>
                        </div>
                    ))}
                </div>
            </div>
        </>
    );
}